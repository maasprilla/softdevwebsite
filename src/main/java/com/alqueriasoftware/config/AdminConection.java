/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.alqueriasoftware.config;

import java.io.IOException;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.TimerTask;

/**
 *
 * @author miguel
 */
public class AdminConection extends TimerTask {

    private static final String ruta = "http://localhost:8080/alqueria_backend/webresources//";
    private static String path = "usuarios";

    @Override
    public void run() {
        checkWS();
        try {
            URL url = new URL(ruta + path);
            HttpURLConnection conn = (HttpURLConnection) url.openConnection();
            conn.setRequestMethod("GET");
            conn.setRequestProperty("Accept", "application/xml");

            if (conn.getResponseCode() == 200) {
                conn.disconnect();
                System.out.println("conectado...........");
            } else {
                conn.disconnect();
                System.out.println("desconectado......................");
            }

        } catch (MalformedURLException e) {

            e.printStackTrace();

        } catch (IOException e) {

            e.printStackTrace();

        }
    }

    public static boolean checkWS() {

        try {
            URL url = new URL(ruta + path);
            HttpURLConnection conn = (HttpURLConnection) url.openConnection();
            conn.setRequestMethod("GET");
            conn.setRequestProperty("Accept", "application/xml");

            if (conn.getResponseCode() == 200) {
                conn.disconnect();
                System.out.println("conectado...........");
                return true;
            } else {
                conn.disconnect();
                System.out.println("desconectado......................");
                return false;
            }

        } catch (MalformedURLException e) {

            e.printStackTrace();
            return false;

        } catch (IOException e) {

            e.printStackTrace();
            return false;

        }
    }

    public static String getUrl() {

        return ruta;
    }

}
