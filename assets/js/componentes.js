import { criarRodape } from "./componente_footer.js";
import { criarHeader } from "./componente_header.js";
// import { criarCard } from "./card.js";
// import { criarCard2 } from "./card2.js";

// Header login ?
$.ajax({
    url: "Log_status.php",
    type: "post",
    success: (resposta)=>{
        let loginStatus = JSON.parse(resposta);
        criarHeader(loginStatus);
    }
})

// Cards
$.ajax({
    url: "",
    type: "post",
    data: {
        conteiner4: 4,
        conteiner: "*"
    },
    success: (resposta)=>{
        let cards = JSON.parse(resposta);

    }
})

criarRodape()