/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dia_20170920;

/**
 *
 * @author alumne
 */
public class Rectangle {
    
    private Punt p1;
    private Punt p3;
    
    public Rectangle(Punt p1, Punt p3){
        // Composició
        this.p1=new Punt(p1.x, p1.y);
        this.p3=new Punt(p3.x, p3.y);
        
        // Agregació
        this.p1=p1;
        this.p3=p3;
    }

    public double perimetre(){
        return 2*(p1.distanciaX(p3)+p1.distanciaY(p3));
    }
    
    public double area(){
        return p1.distanciaX(p3)*p1.distanciaY(p3);
    }
    
    public Punt centre(){
        return new Punt((p1.x+p3.x)/2,(p1.y+p3.y)/2);
    }
    
    public static Rectangle demanarRectangle(){
        Punt p1 = Punt.demanarPunt();
        Punt p3 = Punt.demanarPunt();
        return new Rectangle(p1,p3);
    }

    public static void main(String[] args) {
//        Rectangle r = Rectangle.demanarRectangle();
        Punt p1 = new Punt(5,7);
        Punt p2 = new Punt(7,10);
        Rectangle r = new Rectangle(p1,p2);
        
        r = null;
        System.out.println(p1);
        System.out.println(p2);

    }
}
