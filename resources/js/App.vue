<template>
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link to="/" class="nav-link">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/create" class="nav-link">Create Task</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/tasks" class="nav-link">Tasks</router-link>
                </li>
            </ul>
            <a href="/auth/twitter">ログイン</a>
            <a href="/auth/twitter/logout">ログアウト</a>
        </nav>
        <router-view></router-view>
    </div>
</template>

<script>
    export default{
    }
</script>