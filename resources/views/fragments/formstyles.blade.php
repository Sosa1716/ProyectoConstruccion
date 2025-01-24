<style>
   * {
    box-sizing: border-box;
}

body {
    background-color: rgb(44, 62, 80); /* Fondo oscuro para toda la página */
    color: #fff; 
    font-family: 'Arial', sans-serif;
}

form {
    width: 100%;
    max-width: 600px;
    padding: 25px;
    border-radius: 12px;
    margin: 0px auto;
    background-color: #1f2d3d; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
}

form label {
    font-weight: bold;
    font-size: 16px;
    margin-bottom: 8px;
    display: block;
    color: rgb(243, 156, 18); 
}

form input[type="text"],
form input[type="number"],
form input[type="email"],
form input[type="date"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 18px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f1f1f1; 
    color: #333;
    font-size: 14px;
    transition: all 0.3s ease;
}

form input[type="text"]:focus,
form input[type="number"]:focus,
form input[type="email"]:focus,
form input[type="date"]:focus {
    border-color: rgb(243, 156, 18); 
    outline: none;
    background-color: #fff; 
}

form button {
    width: 100%;
    padding: 12px;
    background-color: rgb(243, 156, 18); 
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
}

form button:hover {
    background-color: rgb(204, 123, 8); 
    transform: translateY(-2px); 
}

form button:active {
    transform: translateY(0); 
}

.alert-warning {
    background-color: rgba(255, 165, 0, 0.1); /
    border-left: 4px solid rgb(243, 156, 18); 
    color: #f39c12;
    padding: 10px;
    margin-bottom: 20px;
    font-size: 16px;
}

.alert-warning ul {
    margin: 0;
    padding-left: 20px;
}

.alert-warning li {
    margin: 5px 0;
}
    
</style>


