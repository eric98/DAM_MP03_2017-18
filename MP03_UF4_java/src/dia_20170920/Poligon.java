/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dia_20170920;

import java.util.Scanner;

/**
 *
 * @author alumne
 */
public class Poligon {

    private Punt punts[];

    public Poligon(Punt punts[]) {
        this.punts=punts;        
    }

    public double perimetre() {
        double perimetreTotal = 0;
        for (int i = 0; i < punts.length - 1; i++) {
            perimetreTotal += punts[i].distanciaPunt(punts[i + 1]);
        }
        perimetreTotal += punts[punts.length - 1].distanciaPunt(punts[0]);
        return perimetreTotal;
    }
    
    public static Poligon demanarPoligon(){
        int numPunts = 0;
        Scanner scanner = new Scanner(System.in);
        do {
            System.out.println("Quants punts vols? (Ha de ser positiu i major que 2)");
            numPunts = scanner.nextInt();
        } while (numPunts > 3);
        Punt[] punts = new Punt[numPunts];        
        System.out.println("Anomena els punts:");
        for (int i = 0; i < punts.length; i++) {
            punts[i] = Punt.demanarPunt();
        }
        return new Poligon(punts);
    }
   
    public static void main(String[] args) {
        
        Poligon p = demanarPoligon();
        System.out.println("Perímetre del polígon = " + p.perimetre());

    }
}
