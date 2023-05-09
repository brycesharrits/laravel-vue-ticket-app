<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite(['resources/js/app.js', 'resources/css/app.css'])
        <p>layout header from app.blade.php</p>
    </head>
    <body>
        <p>body content prepend from app.blade.php</p>
        @yield('content')</body>
</html>

<script>
  const { createApp } = Vue;

  createApp({
    data() {
      return {
        message: 'Hello Vue!'
      }
    },
    components: {
        // HelloWorld,
        TestComponent
    }
  }).mount('#app')
</script>