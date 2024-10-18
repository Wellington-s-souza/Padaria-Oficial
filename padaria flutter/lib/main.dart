import 'dart:html';
import 'dart:ui';

import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:padaria/menunavegacao.dart';

void main() {
  runApp(NovaClasse());
}

class NovaClasse extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Padaria',
      theme: ThemeData(
        primarySwatch: Colors.brown,
      ),
      home: ClasseNova(),
    );
  }
}

class ClasseNova extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return ClasseNovaEstado();
  }
}

class ClasseNovaEstado extends State<ClasseNova> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: Menunavegacao(),
      appBar: AppBar(
        centerTitle: true,
        title: Text(
          "Padaria",
          style: TextStyle(color: Colors.white, fontSize: 40),
        ),
        actions: [
          CircleAvatar(
            backgroundImage: NetworkImage(
              'data:image/jpeg;base64,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',
            ),
            radius: 30,
          )
        ],
      ),
      body: Container(
        width: double.infinity,
        height: double.infinity,
        color: Colors.white,
        child: Column(
          children: [
            Text(
              "Login",
              style: TextStyle(
                fontSize: 40,
                color: Colors.black,
              ),
            ),
            Image.network(
                "https://static.vecteezy.com/ti/vetor-gratis/p1/2387693-icone-do-perfil-do-usuario-gr%C3%A1tis-vetor.jpg",
                width: 300,
                height: 300,
                fit: BoxFit.fill),
            TextFormField(
              decoration: InputDecoration(
                border: OutlineInputBorder(),
                labelText: "Login",
                hintText: "Entre com seu login",
              ),
            ),
            TextFormField(
              decoration: InputDecoration(
                border: OutlineInputBorder(),
                labelText: "Senha",
                hintText: "Entre com sua senha",
              ),
            ),
            SizedBox(height: 10),
            TextButton(
              style: TextButton.styleFrom(
                backgroundColor: Colors.brown,
                elevation: 20,
                shadowColor: Colors.brown,
              ),
              child: Text(
                'Entrar',
                style: TextStyle(
                  color: Colors.black,
                ),
              ),
              onPressed: () {},
            ),
            SizedBox(height: 10),
            TextButton(
              style: TextButton.styleFrom(
                backgroundColor: Colors.brown,
                elevation: 20,
                shadowColor: Colors.brown,
              ),
              child: Text(
                'Cadastrar-se',
                style: TextStyle(
                  color: Colors.black,
                ),
              ),
              onPressed: () {},
            ),
          ],
        ),
      ),
    );
  }
}
