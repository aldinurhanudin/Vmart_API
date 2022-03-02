import 'package:flutter/material.dart';
import 'package:flutter/perpus/login.dart';
void main() {
  runApp(PerpusApp());
}

class PerpusApp extends StatelessWidget {
  const PerpusApp({Key? key}) : super(key:key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: HomePage(),
    );
  }
}

class HomePage extends StatelessWidget {
  const HomePage({Key? key}) : super(key:key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Text Field"),
      ),
    );
  }
}