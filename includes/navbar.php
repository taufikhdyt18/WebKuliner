<style>
    /* Reset margin dan padding */
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    /* Styling navbar */
    nav {
        background: linear-gradient(to bottom, #9523C5, #000000); /* Linear gradient */
        overflow: hidden;
        text-align: center;
        padding: 10px 0;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); 
    }

    nav a {
        display: inline-block;
        color: white; 
        text-decoration: none;
        padding: 14px 20px; 
        font-size: 16px;
        transition: background-color 0.3s ease, color 0.3s ease;
        border-radius: 4px; 
    }

    nav a:hover {
        background-color: rgba(255, 255, 255, 0.2);
        color: #FFD700; 
    }

    nav a.active {
        background-color: rgba(255, 255, 255, 0.4); 
        color: #FFFFFF; 
        font-weight: bold;
    }
</style>

<nav>
    <a href="?page=home" >Home</a>
    <a href="?page=makanan">Makanan</a>
    <a href="?page=minuman">Minuman</a>
    <a href="?page=about">About</a>
    <a href="?page=contact">Contact</a>
</nav>
