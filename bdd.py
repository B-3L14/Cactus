import mysql.connector
import pandas as pd
import datetime

# Conexão com o banco de dados
conn = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="ecommerce"
)
cursor = conn.cursor()

# Carregar planilhas do Excel
file_path = "dataset_ecommerce.xlsx"
sheets = pd.read_excel(file_path, sheet_name=None)

# Processar cada aba do Excel
for sheet_name, df in sheets.items():
    # Substituir NaN por None
    df = df.where(pd.notnull(df), None)

    # Converter datas para datetime.datetime (formato aceito pelo MySQL)
    for col in df.columns:
        if pd.api.types.is_datetime64_any_dtype(df[col]):
            df[col] = df[col].apply(lambda x: x if x is None else x.to_pydatetime())

    # Preparar query SQL
    cols = ", ".join([f"`{col}`" for col in df.columns])
    placeholders = ", ".join(["%s"] * len(df.columns))
    query = f"INSERT INTO `{sheet_name}` ({cols}) VALUES ({placeholders})"

    # Inserir linha por linha
    for index, row in df.iterrows():
        try:
            values = []
            for val in row:
                if isinstance(val, pd.Timestamp):
                    values.append(val.to_pydatetime())
                elif isinstance(val, float) and pd.isna(val):
                    values.append(None)
                else:
                    values.append(val)
            cursor.execute(query, tuple(values))
        except Exception as e:
            print(f"Erro ao inserir linha {index} na tabela '{sheet_name}': {e}")

    conn.commit()
    print(f"Dados inseridos na tabela '{sheet_name}'")

# Encerrar conexão
cursor.close()
conn.close()
print("Importação concluída!")
