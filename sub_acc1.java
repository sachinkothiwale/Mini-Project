package com.example.pranali.vishwamangalapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;

public class sub_acc1 extends AppCompatActivity {

    ListView list1;
    String arr[]={"Washers","Chainsaws","Garden shredders","Hedge","Trimmers"};

    String arr1[]={"Watering cans","Flower shears","Hedge shears","secateurs"};

    String arr2[]={"Hand pruners","Loppers","Pruning saws","Axes","Hatchets","scythes"};

    String arr3[]={"Trowels","Dibbers","Bulb planter"};

    String arr4[]={"Rakes","Hoes","Wheelbarrows"};

    String arr5[]={"Cloches","Cold Frames"};

    String arr6[]={"Shovels","Spades","Forks","Hoes Pipes","Sprinklers"};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sub_acc1);
        list1=(ListView)findViewById(R.id.listview);
        int data = getIntent().getExtras().getInt("position");
        //int pos=Integer.parseInt(data);
  Toast.makeText(getApplicationContext(),"Position"+data,Toast.LENGTH_LONG).show();


       final ArrayAdapter<String> adapter=new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1,arr);
        final ArrayAdapter<String> adapter1=new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1,arr1);
        final ArrayAdapter<String> adapter2=new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1,arr2);
        final ArrayAdapter<String> adapter3=new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1,arr3);
        final ArrayAdapter<String> adapter4=new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1,arr4);
        final ArrayAdapter<String> adapter5=new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1,arr5);
        final ArrayAdapter<String> adapter6=new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1,arr6);



                switch(data) {
                    case 0:
                        list1.setAdapter(adapter);
                        list1.setOnItemClickListener(new AdapterView.OnItemClickListener() {
                            @Override
                            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                                switch(position)
                                {
                                    case 0:
                                        Toast.makeText(getApplicationContext(),"Position"+position,Toast.LENGTH_LONG).show();

                                        break;
                                    case 1:
                                        Toast.makeText(getApplicationContext(),"Position"+position,Toast.LENGTH_LONG).show();

                                        break;
                                    case 2:
                                        Toast.makeText(getApplicationContext(),"Position"+position,Toast.LENGTH_LONG).show();

                                        break;
                                    case 3:  Toast.makeText(getApplicationContext(),"Position"+position,Toast.LENGTH_LONG).show();


                                        break;

                                    case 4:
                                        Toast.makeText(getApplicationContext(),"position"+position,Toast.LENGTH_LONG).show();

                                        break;

                                }
                            }
                        });

                         break;
                    case 1:
                        list1.setAdapter(adapter1);
                        break;
                    case 2:
                        list1.setAdapter(adapter2);
                        break;
                    case 3:
                        list1.setAdapter(adapter3);
                        break;
                    case 4:
                        list1.setAdapter(adapter4);
                        break;
                    case 5:
                        list1.setAdapter(adapter5);
                        break;
                    case 6:
                        list1.setAdapter(adapter6);
                        break;

                }

    }
}
