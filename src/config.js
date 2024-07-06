import dotenv from 'dotenv';
dotenv.config();

export default {
    apiBaseUrl: process.env.API_BASE_URL || 'https://tu-sitio.netlify.app/.netlify/functions/api',
    // ... otras configuraciones
  };
