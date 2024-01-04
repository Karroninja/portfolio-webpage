'use strict';

const aboutUs = [
    {name: "Ludvig", info: "... is responsible for the UI and graphic design on the Starcade website. With his imaginative creativity and exceptional drawing skills, he made mascot Allan to lead you the way through the galaxy and enjoy our games without any doubt. Ludvig loves the arcade game Pacman and Earth is his favorite planet, since it is acually inhabitable. He rates the Starcade website a 9 out of 10 stars. "}, 
    {name: "Johanna" , info: "... is the project lead of the Starcade Crew. She keeps an eye on every part of the project, from presenting prototypes to dividing work into sprints in Trello and keeping structured meetings. Johanna's aim is to get each team member to pass the course. Her favorite planet is Pluto and Snake is her most played arcade game. Johanna gives the Starcade website 9/10 stars"}, 
    {name: "Karoline Lindroos", info:"... is the Starcade Crew's great back-end developer. By showing major skills in php - the popular scripting language - she made it possible to secure login- and register-procedure, for you enjoy multiple games and keep track of your rank. Karoline's favorite planet is Saturn, and Labyrinth is her most played arcade game. She gives the Starcade website a 10/10 stars."}, 
    {name: "Petter", info: "... is the Starcade Crew's front-end developer. He works incredible fast and impresses with his solution focused thinking. Petter uses javascript - a dynamic object-based programming language - to give you and all users an interactive experience to enjoy while trying to out-win each other. His favorite arcade game is Star Wars Episode I: Racer and he likes the Venus planet. Petter gives 10 stars out of 10 to the Starcade website."}
]

$('.aboutCrewDiv').on('click', function(){
    $('.marked').removeClass('marked');
    $(this).addClass('marked');
    let clickedCrew = $(this).attr('id').toLowerCase()
    aboutUs.forEach(crewM => {
        let useName = crewM.name.toLowerCase().split(' ').join('');

        if(clickedCrew == "about" + useName){
            let aboutInfo = document.getElementById('aboutInfoPlanet');

            aboutInfo.innerHTML = '';
            
            let infoDiv = document.createElement('div');
            let name = document.createElement('h1');
            name.innerHTML = crewM.name;
            let info = document.createElement('p');
            info.innerHTML = crewM.info;
            infoDiv.append(name, info);

            aboutInfo.append(infoDiv);
        }
    })
})


