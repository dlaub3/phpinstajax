<template>
    <main class="col s12 m10 l8 offset-m1 offset-l2">
        <header class="row section white-text">
            <div class="col s12 m10 l8 offset-m1 offset-l2">
                <h1> {{h1}} </h1>
                <form id="form" action="app.php" method="post" v-on:click.prevent="getUserInfo">
                    <div class="input-field">
                        <select>
                            <option value="" disabled selected>Search Type</option>
                            <option value="username">username</option>
                            <option value="tag">tag</option>
                        </select>
                        <label>Select A Search Type</label>
                    </div>
                    <label>Search Instagram</label>
                    <input type="text" name="username" value="">

                    <button class="btn blue waves-effect waves-light" type="submit" name="submit">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </form>
                <h2 class="red btn error darken-2" v-on:click="getResponseData.error = null" v-show="getResponseData.error"><i class="close material-icons right">close</i>{{getResponseData.error}}</h2>
            </div>
        </header>
        <div class="row">
            <div v-if="getResponseData &&
                getResponseData.followed_by &&
                getResponseData.followed_by.count
                ">
                <!-- null value allows state to reset and update view -->
                <profile></profile>
            </div>

            <div v-if="getResponseData &&
                getResponseData.media &&
                getResponseData.media.nodes
                ">
                <!-- null value allows state to reset and update view -->
                <search></search>
                </div >
            </div>

        </main>
    </template>

    <script>
/* @flow */

import Profile from './Profile.vue';
import Search from './Search.vue';
import {
    mapGetters
} from 'vuex';
import { mapState } from 'vuex';

export default {
    name: 'app',
    components : {
        'profile': Profile,
        'search': Search
    },
    computed: {
        ...mapGetters([
            'getResponseData'
        ])
    },
    data () {
        return {
            h1: "PHPInstajax",
        }
    },
    methods: {
        getUserInfo(e) {
            //manually setting values since
            //materialize-css stores selected option
            //in HTML <li> not the input
            let option = $(".active>span").html();
            let search = $('#form [name="username"]').val();
            let formData = {"option":  option, "search": search};
            formData = JSON.stringify(formData);
            this.$store.dispatch('apiRequest', formData);
        }
    }
}
</script>

<style{{#sass}} lang="scss"{{/sass}}>
#app {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
}
h1, h2 {
    font-weight: normal;
}
ul {
    list-style-type: none;
    padding: 0;
}
li {
    display: inline-block;
    margin: 0 10px;
}
a {
    color: #42b983;
}
</style>
