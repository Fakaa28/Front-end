interface miPersona {
    nombre: string;
    edad: number;
    direccion: miDireccion,
    mostrarDireccion:()=>string;

}
interface miDireccion {
    emailDir: string;
    pais: string;
    ciudad: string;
}

 const Persona: miPersona ={
 nombre: 'Facundo',
 edad:18,
 direccion:{
    emailDir: 'tuvieja1004@gmail.com',
    pais: 'Argentina',
    ciudad: 'Ciudad de Buenos Aires'
 },
 mostrarDireccion(){
    return this.nombre + ','+this.direccion.ciudad+','+this.direccion.pais;
 }


 
 };
 console.log(Persona.mostrarDireccion())

 let nombre: string = '';
 let telefono: number 
  let dni: number 