import './bootstrap';



const getWeatherIcon = ({weather, invoker}) =>{

    switch(weather)
    {
        case "Sunny":
            invoker.className="fa fa-sun"
            break;
        case "Windy":
            invoker.className="fa fa-wind"
            break;
        case "Cloudy":
            invoker.className="fa fa-cloud"
            break;
    }

}
