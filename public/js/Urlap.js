class Urlap{
    constructor(elem, adat){
        this.elem=elem;
        this.adat=adat;
        this.elem.tevekenyseg_id=this.adat.tevekenyseg_id;
        this.elem.tevekenyseg_nev=this.adat.tevekenyseg_nev;
   
        this.setAdat(this.adat);
    }

    setAdat(adat){
        this.adat=adat;
   
    }


}