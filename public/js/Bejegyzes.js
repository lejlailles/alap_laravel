class Bejegyzes {
    constructor(elem, adat, osztalyok) {
        this.osztalyok=osztalyok;
        this.elem = elem;
        this.adat = adat;
        this.osztaly = this.elem.find(".osztaly");
        this.tevekenyseg = this.elem.find(".tevekenyseg");
        this.pont = this.elem.find(".pont");
        this.statusz = this.elem.find(".statusz");

        this.setAdat(this.adat);
    }

    setAdat(adat) {
        this.adat = adat;
        this.osztaly.text(this.osztalyok[adat.osztaly_id]);
        this.tevekenyseg.text(adat.tevekenyseg.tevekenyseg_nev);
        this.pont.text(adat.tevekenyseg.pontszam);
        this.statusz.text(adat.allapot);
    
    }
}
