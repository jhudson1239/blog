<nav class="w-full h-16 bg-indigo">
    <div class="float-right ">
        <div class="mt-4 mr-2 text-white"><?php echo $_SESSION['user']['name']?></div>
        <form action='includes/clear_session.php'>
            <button class='text-white'>Logout</button>
        </form>
    </div>
</nav>