import 'package:flutter/material.dart';

void main() {
  runApp(PerpusApp());
}

class PerpusApp extends StatelessWidget {
  const PerpusApp({Key? key}) : super(key: key);


  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home:Scaffold(
        appBar: AppBar(
          title: Text("Judul"),
        ),
        body: ListView(
           scrollDirection: Axis.vertical,
           children: [
             Container(
               width: 50,
               height: 100,
               color:Colors.red,
               child: Center(
                 child: Text("Halo"),
               ),
             ),
             Container(
               width: 100,
               height: 100,
               color:Colors.blue,
               child: Center(
                 child: Text("Halo"),
               ),
             ),
           ],
          ),
        ),
    );
  }
}