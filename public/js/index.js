$(function () {
    const osztalyok = ["Válassz osztályt!", "SZF1A", "SZF1B", "SZF2A", "SZF2B"];
    const token = $('meta[name="csrf-token"]').attr("content");
    const myAjax = new MyAjax(token);
    const bejegyzesek = [];
    const tevekenysegek = [];
    const szuloElem = $(".bejegyzesSzulo");
    const sablonElem = $(".bejegyzesSablon");

    let tevekenysegVegp = "http://127.0.0.1:8000/api/tevekenyseg";
    let apiVegpont = "http://127.0.0.1:8000/api/bejegyzesek";

    myAjax.getAdat(tevekenysegVegp, tevekenysegek, tevekenysegFeltolt);
    myAjax.getAdat(apiVegpont, bejegyzesek, bejegyzesLista);
    osztalyFeltolt();

    function tevekenysegFeltolt(tevekenysegek) {
        $("#tevekenyseg").append("<option>Válassz tevékenységet!</option>");
        let option = "";
        tevekenysegek.forEach(function (elem) {
            option =
                "<option value='" +
                elem.tevekenyseg_id +
                "'>" +
                elem.tevekenyseg_nev +
                "</option>";
            $("#tevekenyseg").append(option);
        });
    }

    function osztalyFeltolt() {
        let option = "";

        for (var i = 0; i < osztalyok.length; i++) {
            option +=
                '<option value="' +
                osztalyok[i] +
                '">' +
                osztalyok[i] +
                "</option>";
        }
        $("#osztaly").append(option);
    }

    function bejegyzesLista(bejegyzesek) {
        szuloElem.empty();
        sablonElem.show();
        bejegyzesek.forEach(function (elem) {
            let adat = sablonElem.clone().appendTo(szuloElem);
            const obj = new Bejegyzes(adat, elem, osztalyok);
        });
        sablonElem.hide();
    }
});
