import { config } from "dotenv"
config()

console.log(process.env.port)

export default {
    port: process.env.port || 3001
   // const port: process.env.port || 3000;
}