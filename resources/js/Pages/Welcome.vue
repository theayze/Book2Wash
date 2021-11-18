<template>
    <Head title="Book2Wash" />

    <div class="container bg-no-repeat bg-cover bg-center bg-fixed bg-b2w-300" >
    <div class="row">

        <div v-cloak class="cont_principal">

            <div class="cont_aura_1"></div>
            <div class="cont_aura_2"></div>

            <div class="cont_error">
                <div>
                <img src="/images/BOOK2WASHFIX2.png" class="justify-center lg:w-1/4 -m-50 -mt-28 pb-8 mx-auto my-auto">
                </div>
                <p class="pb-4 italic text-sm align-middle md:align-top">Roses a red , violets are blue. you need to shower your car does too.</p>
                <div v-if="canLogin" class="">
                    <Link v-if="$page.props.auth.user" href="/dashboard" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">
                        Profile
                    </Link>

                    <template v-else>
                        <Link :href="route('login')" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">
                            Log in
                        </Link>

                        <Link v-if="canRegister" :href="route('register')" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">
                            Register
                        </Link>
                    </template>
                </div>
            </div>

        </div>
    </div>
    </div>


</template>

<style scoped>
* {

/* background-color: #92BDCA; */
text-align:center;
}
body {
    background-color: #92BDCA;
}
.cont_principal {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.cont_error {
    position: absolute;
    width: 100%;
    height: 300px;
    top: 50%;
    margin-top:-150px;
}

.cont_error > img  {
    left:-100%;
    transition: all 0.5s;
}


.cont_error > p  {
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    /* margin-top: -10vw; */
    letter-spacing: 2px;
    color:#9294AE;
    position: relative;
    left:100%;
    transition: all 0.5s;
    transition-delay: 0.5s;
-webkit-transition: all 0.5s;
-webkit-transition-delay: 0.5s;
}

.cont_aura_1 {
    position:absolute;
    width:300px;
    height: 120%;
    top:25px;
    right: -340px;
    background-color: #325B68;
    box-shadow: 0px 0px  60px  20px  rgba(27, 45, 78, 0.5);
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
}

.cont_aura_2 {
    position:absolute;
    width:100%;
    height: 300px;
    right:-10%;
    bottom:-301px;
    background-color: #325B68;
    box-shadow: 0px 0px  60px  20px  rgba(27, 45, 78, 0.5);
    z-index:5;
    transition: all 0.5s;
-webkit-transition: all 0.5s;
}

.cont_error_active > .cont_error > img {
    left:0%;
}
.cont_error_active > .cont_error > p {
    left:0%;
}

.cont_error_active > .cont_aura_2 {
    animation-name: animation_error_2;
    animation-duration: 4s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
transform: rotate(-20deg);
}
.cont_error_active > .cont_aura_1 {
    transform: rotate(20deg);
    right:-170px;
    animation-name: animation_error_1;
    animation-duration: 4s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
}

@-webkit-keyframes animation_error_1 {
    from {
    -webkit-transform: rotate(20deg);
    transform: rotate(20deg);
    }
    to {  -webkit-transform: rotate(25deg);
    transform: rotate(25deg);
    }
}
@-o-keyframes animation_error_1 {
    from {
    -webkit-transform: rotate(20deg);
    transform: rotate(20deg);
    }
    to {  -webkit-transform: rotate(25deg);
    transform: rotate(25deg);
    }

}
@-moz-keyframes animation_error_1 {
    from {
    -webkit-transform: rotate(20deg);
    transform: rotate(20deg);
    }
    to {  -webkit-transform: rotate(25deg);
    transform: rotate(25deg);
    }

}
@keyframes animation_error_1 {
    from {
    -webkit-transform: rotate(20deg);
    transform: rotate(20deg);
    }
    to {  -webkit-transform: rotate(25deg);
    transform: rotate(25deg);
    }
}




@-webkit-keyframes animation_error_2 {
    from { -webkit-transform: rotate(-15deg);
    transform: rotate(-15deg);
    }
    to { -webkit-transform: rotate(-20deg);
    transform: rotate(-20deg);
    }
}
@-o-keyframes animation_error_2 {
    from { -webkit-transform: rotate(-15deg);
    transform: rotate(-15deg);
    }
    to { -webkit-transform: rotate(-20deg);
    transform: rotate(-20deg);
    }
}

@-moz-keyframes animation_error_2 {
    from { -webkit-transform: rotate(-15deg);
    transform: rotate(-15deg);
    }
    to { -webkit-transform: rotate(-20deg);
    transform: rotate(-20deg);
    }
}
@keyframes animation_error_2 {
    from { -webkit-transform: rotate(-15deg);
    transform: rotate(-15deg);
    }
    to { -webkit-transform: rotate(-20deg);
    transform: rotate(-20deg);
    }
}

</style>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
    Head,
    Link,
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
}

window.onload = function(){
document.querySelector('.cont_principal').className= "cont_principal cont_error_active";

}
</script>
