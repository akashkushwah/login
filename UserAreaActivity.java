package login.example.login;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class UserAreaActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_user_area);


        final EditText etUserName = (EditText) findViewById(R.id.etUserName);
        final EditText etAge = (EditText) findViewById(R.id.etAge);
        final TextView welcomeMessege = (TextView) findViewById(R.id.tvwelcomeMsg);

    }
}
