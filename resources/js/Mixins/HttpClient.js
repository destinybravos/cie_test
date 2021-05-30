import axios from 'axios';

class HttpClient{
    constructor() {
        const   domain = process.env.MIX_API_DOMAIN, 
                protocol = process.env.MIX_API_PROTOCOL,
        // const   domain = 'cietest.com/api', demo.coingust.com
        // const   domain = 'demo.coingust.com/api',
        //         protocol = 'https',
                appUri = `${protocol}://${domain}`;

        this.client = axios.create({
            baseURL : appUri
        })
    }
}

const httpClient = new HttpClient();

window.httpClient = httpClient;

export default httpClient;