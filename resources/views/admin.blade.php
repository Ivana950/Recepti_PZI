@extends('layouts.app')

@section('content')

<body class="sidebar-mini" style="height: auto;">
    <v-row class="main-row">
        <v-col cols="3" height>
        <v-system-bar app>
      <v-spacer></v-spacer>

      
    </v-system-bar>

    <v-navigation-drawer
      v-model="drawer"
      app
    >
      <v-sheet
        color="grey lighten-4"
        class="pa-4"
      >
        <v-avatar
          class="mb-4"
          color="grey darken-1"
          size="64"
        ></v-avatar>

        <div>john@vuetifyjs.com</div>
      </v-sheet>

      <v-divider></v-divider>

      <v-list>
        

          <v-list-item-content>
            <v-list-item-title></v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
        </v-col>
        <v-col cols="9">
            @yield('sadrzaj')
        </v-col>


    </v-row>

</body>

@endsection