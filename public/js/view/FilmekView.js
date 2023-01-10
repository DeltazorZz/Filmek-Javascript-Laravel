import FilmView from "./FilmView.js";

class FilmekView{
    constructor(tomb, szuloElem) {
        szuloElem.html(`<table class="table table-hover">
        <thead>
        <tr>
        <th>ID</th>
        <th>Cím</th>
        <th>Szerző</th>
        <th>Kép</th>
        <th>Ár</th>
        <th></th>
        <th></th>
        </tr>
        </thead>
        <tbody></tbody>
        </table>`);
        this.tablaElem = szuloElem.children("table:last-child");
        this.tbodyElem = this.tablaElem.children("tbody")

        tomb.forEach(film => {
            new FilmView(film,this.tbodyElem);
        });
    }

}
export default FilmekView;