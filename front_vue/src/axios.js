// src/axios.js
import axios from 'axios';

const instance = axios.create({
    baseURL: 'http://localhost:8000/api', // Remplacez par l'URL de votre API
        headers: {
        'Content-Type': 'application/json',
    }
    
});
export default instance;
