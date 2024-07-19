import app from "./src/app";
import serverless from "serverless-http";
const app = require('./src/app');
export const handler = serverless(app);
// src/app.js
import cors from 'cors';

const app = express();
app.use(cors());
//import "../../BaseDatos/conexion"
const PORT = process.env.PORT || 3000;
//app.listen(app.get("port"))

import serverless from "serverless-http";

//export const handler = serverless(app);
//console.log('holazx a tdod', app.get("port"))
app.get('/products', (req, res) => {
    res.send('This is the products page');
  });
