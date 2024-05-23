async function spaceTotal(){

    //fa la richiesta dell'URL del json
    const requestURL = "https://lpbgith.github.io/my-repository/JSON/nasa.json";

    //fa la la richiesta del file json
    const request = new Request(requestURL);

    //da una risposta al file json
    const response = await fetch(request);

    //accede ai dati del file json
    const astronauti = await response.json();
    

    header(astronauti);
    astroPersone(astronauti);
} 



function header(obj){

    const header = document.querySelector('header');

    const h1 = document.createElement('h1');

    h1.textContent = 'PEOPLE IN THE SPACE';

    header.appendChild(h1);

    const h2 = document.createElement('h2');

    h2.textContent = `How Many People Are In Space Right Now`;

    header.append(h2);

}



function astroPersone(obj){

    const main = document.querySelector('main');
    const footer = document.querySelector('footer');

    const paraFooter = document.createElement('h2');

    const personeSpaziali = obj.people;
    
    paraFooter.textContent =  `There are ${obj.number} people in the space.`;
    
    footer.appendChild(paraFooter);

    for(pS of personeSpaziali){

        const h3 = document.createElement('h3');
        const para = document.createElement('p');
        const div = document.createElement('div');


        h3.textContent = pS.name;
        para.textContent = `Craft: ${pS.craft}`;

        // const superpowers = hero.powers;
 
        // for(const power of superpowers){

        //     const listItem = document.createElement('li');

        //     listItem.textContent = power;

        //     myList.appendChild(listItem);

        div.appendChild(h3);
        div.appendChild(para);
        main.appendChild(div);
        }

    }



spaceTotal();

