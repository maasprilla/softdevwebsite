/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.alqueriasoftware.controllers;

import com.alqueriasoftware.animations.FadeInLeftTransition;
import com.alqueriasoftware.animations.FadeInRightTransition;
import com.alqueriasoftware.animations.FadeInTransition;
import com.jfoenix.controls.JFXSpinner;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.application.Platform;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Label;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.VBox;
import javafx.scene.text.Text;

/**
 * FXML Controller class
 *
 * @author Familia
 */
public class SplashscreenController implements Initializable {

    @FXML
    private Label lblClose;
    @FXML
    private Text lblWelcome;
    @FXML
    private VBox vboxBottom;
    
//    @FXML
//    private Text lblRudy;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        longStart();
        lblClose.setOnMouseClicked((MouseEvent event) -> {
            Platform.exit();
            System.exit(0);
        });
        // TODO
    }

    private void longStart() {
        
//        Service<ApplicationContext> service = new Service<ApplicationContext>() {
//            @Override
//            protected Task<ApplicationContext> createTask() {
//                return new Task<ApplicationContext>() {           
//                    @Override
//                    protected ApplicationContext call() throws Exception {
//                        ApplicationContext appContex = config.getInstance().getApplicationContext();
//                        int max = appContex.getBeanDefinitionCount();
//                        updateProgress(0, max);
//                        for (int k = 0; k < max; k++) {
//                            Thread.sleep(50);
//                            updateProgress(k+1, max);
//                        }
//                        return appContex;
//                    }
//                };
//            }
//        };
//        service.start();
//        service.setOnRunning((WorkerStateEvent event) -> {
        new FadeInLeftTransition(lblWelcome).play();
//        new FadeInRightTransition(lblRudy).play();
        new FadeInTransition(vboxBottom).play();
//        });
//        service.setOnSucceeded((WorkerStateEvent event) -> {
//            config2 config = new config2();
//            config.newStage(stage, lblClose, "/herudi/view/login.fxml", "Sample Apps", true, StageStyle.UNDECORATED, false);
//        });
    }

}
