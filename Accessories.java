package com.example.pranali.vishwamangalapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;

public class Accessories extends AppCompatActivity {
    ListView listView;
    String comArray[]={"Garden machinery","watering tools","cutting tools","planting tools","cultivating tools","propagating tools","digging tools"};


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_accessories);

        listView=findViewById(R.id.listview);

        ArrayAdapter<String> adapter=new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1,comArray);



        listView.setAdapter(adapter);
        listView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                //int pos=position;
                Toast.makeText(getApplicationContext(),"Position"+position,Toast.LENGTH_LONG).show();
                Intent i=new Intent(Accessories.this,sub_acc1.class);
                i.putExtra("position",position);

                startActivity(i);

                }
        });

    }


    }
