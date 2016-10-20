package com.mycompany.alqueriasoftware;

import com.alqueriasoftware.config.AdminConection;
import java.util.Timer;
import javafx.application.Application;
import static javafx.application.Application.launch;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;
import javafx.stage.StageStyle;

public class MainApp extends Application {

    @Override
    public void start(Stage stage) throws Exception {

        Parent root = FXMLLoader.load(getClass().getResource("/fxml/splashscreen.fxml"));

        Scene scene = new Scene(root);
        scene.getStylesheets().add("/styles/splashscreen.css");

        stage.setTitle("Alqueria");
        stage.setScene(scene);
        stage.setResizable(false);
        stage.initStyle(StageStyle.UNDECORATED);
        stage.show();

        Timer hilocon = new Timer("TimerThread");
        hilocon.schedule(new AdminConection(), 0, 5000);
    }

    /**
     * The main() method is ignored in correctly deployed JavaFX application.
     * main() serves only as fallback in case the application can not be
     * launched through deployment artifacts, e.g., in IDEs with limited FX
     * support. NetBeans ignores main().
     *
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        launch(args);
    }

}
