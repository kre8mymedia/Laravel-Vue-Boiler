<template>
    <div class="container">
        <ul class="mb-3 nav nav-tabs">
            <li class="nav-item">
                <router-link class="nav-link" to="/dashboard">Dashboard</router-link>
            </li>
        </ul>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an Example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('EXAMPLE mounted.')
        }
    }
</script>
