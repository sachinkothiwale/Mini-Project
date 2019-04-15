package com.example.pranali.vishwamangalapp;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class LoginActivity extends AppCompatActivity {


    EditText e1,e2;
    Button btn;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        e1 = findViewById(R.id.editText2);
        e2 = findViewById(R.id.editText3);
    }


        public void login(View view)
        {

            String s1=e1.getText().toString();
            String s2=e2.getText().toString();

            String type="Login";
            Background bg=new Background(this);
            bg.execute(type,s1,s2);
        }


}
