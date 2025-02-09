<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign in</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href='../CSS/main.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
<body>
<div class="wrapper border-dark shadow-lg">
    <form action="">
    <h1 class="exo-2 text-black mb-5">Sign in</h1>
    <div class="exo-2">
        <div class="labelLine" style="font-size: 14px">Department</div>
        <select class="lavender-gray bg-transparent" required>
            <option value="" selected invalid>No department selected</option>
            <option value="hr">Human Resources</option>
            <option value="it">Information Technology</option>
            <option value="finance">Finance</option>
            <option value="marketing">Marketing</option>
            <option value="sales">Sales</option>
        </select>
    </div>
    <div class="input-box exo-2">
        <input class="lavender-gray" type="text" placeholder="" required>
        <div class="labelLine">Username</div>
        <i class='bx bxs-user text-darkerSoftYellow text-outline'></i>
    </div>
    <div class="input-box exo-2">
        <input type="password" placeholder="" required>
        <div class="labelLine">Password</div>
        <i class='bx bxs-lock-alt text-darkerSoftYellow text-outline' ></i>
    </div>
    <div class="remember-forgot exo-2 text-black">
        <!-- <label><input type="checkbox" class="opacity-50">Remember Me</label> -->
    </div>
    <button type="submit" class="btn exo-2">Login</button>
    </form>
</div>
</body>
</html>