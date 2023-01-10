import AdatModel from "../model/Adatmodel.js";
import FilmekView from "../view/FilmekView.js";

class FilmController {
    constructor() {
        
        const token = $('meta[name="csrf-token"]').attr("content")
        this.vegpont = "api/filmek"
        const filmmodel = new AdatModel(token);/* 
        $('#belepes').on("click", ()=>{
            console.log('megvan')
        }); */

        filmmodel.adatBe(this.vegpont, this.FilmAdatok);
        
        $(window).on("modosit",(event)=>{
            filmmodel.adatModosit(this.vegpont, event.detail)
            
            
        })
        $(window).on("torol",(event)=>{
           filmmodel.adatTorol(this.vegpont, event.detail)
            location.reload();
        })
    }
    FilmAdatok(tomb) {
        const szuloElem =$("main");
        new FilmekView(tomb, szuloElem);
        //console.log(tomb);
    }
}

export default FilmController;