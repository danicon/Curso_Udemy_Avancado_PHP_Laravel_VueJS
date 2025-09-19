import 'bootstrap';

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ?? `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });

// Interceptar os requesters da aplicação
axios.interceptors.request.use(
    config => {

        //Definir para todas as requisições os parametros de accept e autorazation
        config.headers['Accept'] = 'application/json'

        //Recuperando o token de autorização dos cookies
        let token = document.cookie.split(';').find(indice => {
            // console.log(indice, indice.includes('token='))
            return indice.includes('token=')
        })

        token = token.split('=')[1]
        token = 'Bearer ' + token

        // console.log(token)
        config.headers.Authorization = token

        console.log('Interceptando o request antes do envio', config);
        return config
    },
    error => {
        console.log('Erro na requisição: ', error);
        return Promise.reject(error)
    }
)

// Intercepatar os responses da aplicação
axios.interceptors.response.use(
    response => {
        console.log('Interceptando a resposta antes da aplicação', response);
        return response
    },
    error => {
        console.log('Erro na resposta: ', error.response);

        if(error.response.status == 401 && error.response.data.message == 'Token has expired') {
            console.log('Fazer uma nova requisição para rota refresh')

            axios.post('http://127.0.0.1:8000/api/refresh')
                .then(response => {
                    console.log('Refresh com sucesso: ', response)

                    document.cookie = 'token='+response.data.token+';SameSite=Lax'
                    console.log('Token atualizado: ', response.data.token)
                    window.location.reload()
                })
        }
        return Promise.reject(error)
    }
)