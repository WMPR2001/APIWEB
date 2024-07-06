import sql from "mssql";

const dbSeting = {
    user: "sa",
    password: "123456789",
    server: "localhost",
    database: "dbprueba",
    port: 1433,
    options: {
      encrypt: false // Desactivar la conexión encriptada
    }
  };
export async function getconexion() {
    try {
        const pool = await sql.connect(dbSeting);
       return pool;
    } catch (err) {
        console.error('Error al ejecutar f la consulta:', err);
    }
}

export {sql}
