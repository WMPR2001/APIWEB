import { Router } from "express";
import {NewProducts, getproduct} from "../controlles/Produc.Control";
const router = Router();

router.get('/', getproduct );

router.post('/', NewProducts );

router.get('/products',  );

router.delete('/products',  );

router.put('/products',  );

export default router;
