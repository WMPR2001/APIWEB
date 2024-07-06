import express from 'express';
import serverless from "serverless-http";
import config from './config';
import ProductRoutes from './routes/Product.routes';

const app = express();

// Configuration
app.use(express.json());
app.use(express.urlencoded({extended: false}));

// Use '/.netlify/functions/api' as base path for routes
app.use('/.netlify/functions/api', ProductRoutes);

// For local development
if (process.env.NODE_ENV === 'development') {
  const PORT = config.port || 3000;
  app.listen(PORT, () => {
    console.log(`Servidor escuchando en http://localhost:${PORT}`);
  });
}

// Export handler for serverless  use
export const handler = serverless(app);