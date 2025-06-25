
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login & Register</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome for Eye Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <!-- Animate.css (optional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body class="bg-gradient-to-br from-purple-600 to-indigo-600 min-h-screen flex items-center justify-center">

    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-4xl animate__animated animate__fadeIn overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2">

<?php if($this->session->flashdata('error')): ?>
    <p style="color:red;"><?php echo $this->session->flashdata('error'); ?></p>
<?php endif; ?>
            <!-- Login Panel -->
            <div id="login-panel" class="flex flex-col justify-center p-10">
                <h2 class="text-3xl font-bold text-indigo-700 mb-6 text-center">Login</h2>
                <form method="POST">
                  
                    <div class="mb-4">
                        <label class="block text-gray-700">Email</label>
                        <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg" required>
                    </div>

                    <!-- Password with eye -->
                    <div class="mb-6 relative">
                        <label class="block text-gray-700">Password</label>
                        <input type="password" name="password" id="login-password" class="w-full px-4 py-2 border rounded-lg pr-10" required>
                        <span class="absolute top-9 right-3 text-gray-600 cursor-pointer" onclick="togglePassword('login-password', 'login-eye')">
                            <i id="login-eye" class="fa-solid fa-eye"></i>
                        </span>
                    </div>

                    <button class="bg-indigo-600 text-white px-6 py-2 rounded-full w-full">Login</button>
                </form>
                <p class="mt-6 text-sm text-center">Don't have an account?
                    <a href="#" onclick="togglePanel()" class="text-indigo-700 font-semibold">Register</a>
                </p>
            </div>

            <!-- Register Panel -->
            <div id="register-panel" class="flex flex-col justify-center p-10 hidden">
                <h2 class="text-3xl font-bold text-purple-700 mb-6 text-center">Register</h2>
                <form method="POST" action="<?= admin_url('register');?>">

                    <div class="mb-4">
                        <label class="block text-gray-700">Name</label>
                        <input type="text" name="name" class="w-full px-4 py-2 border rounded-lg" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Email</label>
                        <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg" required>
                    </div>

                    <!-- Password with eye -->
                    <div class="mb-4 relative">
                        <label class="block text-gray-700">Password</label>
                        <input type="password" name="password" id="register-password" class="w-full px-4 py-2 border rounded-lg pr-10" required>
                        <span class="absolute top-9 right-3 text-gray-600 cursor-pointer" onclick="togglePassword('register-password', 'register-eye')">
                            <i id="register-eye" class="fa-solid fa-eye"></i>
                        </span>
                    </div>

                    <!-- Confirm Password with eye -->
                    <div class="mb-6 relative">
                        <label class="block text-gray-700">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="confirm-password" class="w-full px-4 py-2 border rounded-lg pr-10" required>
                        <span class="absolute top-9 right-3 text-gray-600 cursor-pointer" onclick="togglePassword('confirm-password', 'confirm-eye')">
                            <i id="confirm-eye" class="fa-solid fa-eye"></i>
                        </span>
                    </div>

                    <button class="bg-purple-600 text-white px-6 py-2 rounded-full w-full">Register</button>
                </form>
                <p class="mt-6 text-sm text-center">Already have an account?
                    <a href="#" onclick="togglePanel()" class="text-purple-700 font-semibold">Login</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        function togglePanel() {
            document.getElementById('login-panel').classList.toggle('hidden');
            document.getElementById('register-panel').classList.toggle('hidden');
        }

        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);

            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>

</body>
</html>
