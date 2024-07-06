
import app from "../../app"

//import "../../BaseDatos/conexion"
const PORT = process.env.PORT || 3000;
//app.listen(app.get("port"))

import serverless from "serverless-http";

export const handler = serverless(app);
//console.log('holazx a tdod', app.get("port"))
app.get('/products', (req, res) => {
    res.send('This is the products page');
  });