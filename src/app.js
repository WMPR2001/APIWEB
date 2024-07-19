import express from 'express';
import cors from 'cors';
import ProductRoutes from './routes/Product.routes';
import dotenv from 'dotenv';

dotenv.config();

const app = express();
app.use(cors());

// Add your routes here
app.use('/products', ProductRoutes);

const PORT = process.env.PORT || 3000;

if (process.env.NODE_ENV !== 'production') {
  app.listen(PORT, () => {
    console.log(`Server running on port ${PORT}`);
  });
}

export default app;
