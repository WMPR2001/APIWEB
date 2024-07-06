import {getconexion, sql} from "../../BaseDatos/conexion";

export const getproduct = async (req, res) => {

    const pool = await getconexion();
   const result = await pool.request().query('SELECT * FROM Productos');
    console.log(result);
   
    res.json(result.recordset);
};



export const NewProducts = async (req, res) => {
    
    const {Descripcion, Precio} = req.body

    if (Descripcion==null || Precio==null) {
        return res.status(400).json({msg: 'Bad request. '})
    }

    const pool = await getconexion();
    await pool.request().input('Descripcion', sql.VarChar, 'PRODUCT TEST').query('INSERT INTO PRODUCTOS (Descripcion) values (@Descripcion)');
    //console.log(Descripcion f, Precio);
    res.json('hola')
};
//export const getproduct = (req, res) => {res.send('holaf mundo')};