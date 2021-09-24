import 'package:flutter/material.dart';
import 'package:crud_sqflite/models/contact.dart';


class EntryForm extends StatefulWidget {
  final Contact contact;

  EntryForm(this.contact);

  @override
  EntryFormState createState() => EntryFormState(this.contact);
}
//class controller
class EntryFormState extends State<EntryForm> {
  Contact contact;

  EntryFormState(this.contact);

  TextEditingController namalengkapController = TextEditingController();
  TextEditingController notelephoneController = TextEditingController();
  TextEditingController namaprojectController = TextEditingController();
  TextEditingController progressController = TextEditingController();
  TextEditingController waktuController = TextEditingController();

  @override
  Widget build(BuildContext context) {
    //kondisi
    if (contact != null) {
      namalengkapController.text = contact.namalengkap;
      notelephoneController.text = contact.notelephone;
      namaprojectController.text = contact.namaproject;
      progressController.text = contact.progress;
      waktuController.text = contact.waktu;

    }
    //rubah
    return Scaffold(
      appBar: AppBar(
        title: contact == null ? Text('Tambah') : Text('Rubah'),
        leading: Icon(Icons.keyboard_arrow_left),
      ),
      body: Padding(
        padding: EdgeInsets.only(top: 15.0, left:10.0, right:10.0),
        child: ListView(
          children: <Widget> [

            // namalengkap
            Padding (
              padding: EdgeInsets.only(top:20.0, bottom:20.0),
              child: TextField(
                controller: namalengkapController,
                keyboardType: TextInputType.text,
                decoration: InputDecoration(
                  labelText: 'namalengkap',
                  border: OutlineInputBorder(
                    borderRadius: BorderRadius.circular(5.0),
                  ),
                ),
                onChanged: (value) {                  
                  //                                                    
                },
              ),
            ),

            // notelephone
            Padding (
              padding: EdgeInsets.only(top:20.0, bottom:20.0),
              child: TextField(
                controller: notelephoneController,
                keyboardType: TextInputType.phone,
                decoration: InputDecoration(
                  labelText: 'notelephone',
                  border: OutlineInputBorder(
                    borderRadius: BorderRadius.circular(5.0),
                  ),
                ),
                onChanged: (value) {
                  //
                },
              ),
            ),

            // namaproject
            Padding (
              padding: EdgeInsets.only(top:20.0, bottom:20.0),
              child: TextField(
                controller: namaprojectController,
                keyboardType: TextInputType.text,
                decoration: InputDecoration(
                  labelText: 'namaproject',
                  border: OutlineInputBorder(
                    borderRadius: BorderRadius.circular(5.0),
                  ),
                ),
                onChanged: (value) {                  
                  //
                },
              ),
            ),

            // progress
            Padding (
              padding: EdgeInsets.only(top:20.0, bottom:20.0),
              child: TextField(
                controller: progressController,
                keyboardType: TextInputType.text,
                decoration: InputDecoration(
                  labelText: 'progress',
                  border: OutlineInputBorder(
                    borderRadius: BorderRadius.circular(5.0),
                  ),
                ),
                onChanged: (value) {
                  //
                },
              ),
            ),
            // waktu
            Padding (
              padding: EdgeInsets.only(top:20.0, bottom:20.0),
              child: TextField(
                controller: waktuController,
                keyboardType: TextInputType.text,
                decoration: InputDecoration(
                  labelText: 'waktu',
                  border: OutlineInputBorder(
                    borderRadius: BorderRadius.circular(5.0),
                  ),
                ),
                onChanged: (value) {
                  //
                },
              ),
            ),

            // tombol button
            Padding (
              padding: EdgeInsets.only(top:20.0, bottom:20.0),
              child: Row(
                children: <Widget> [
                  // tombol simpan
                  Expanded(
                    // ignore: deprecated_member_use
                    child: RaisedButton(
                      color: Theme.of(context).primaryColorDark,
                      textColor: Theme.of(context).primaryColorLight,
                      child: Text(
                        'Save',
                        textScaleFactor: 1.5,
                      ),
                      onPressed: () {
                        if (contact == null) {
                          // tambah data

                          contact = Contact(namalengkapController.text, notelephoneController.text, namaprojectController.text, progressController.text, waktuController.text);
                        } else {
                          // ubah data
                          contact.namalengkap = namalengkapController.text;
                          contact.notelephone = notelephoneController.text;
                          contact.namaproject = namaprojectController.text;
                          contact.progress = progressController.text;
                          contact.waktu = waktuController.text;
                        }
                        // kembali ke layar sebelumnya dengan membawa objek contact
                        Navigator.pop(context, contact);
                      },
                    ),
                  ),
                  Container(width: 5.0,),
                  // tombol batal
                  Expanded(
                    // ignore: deprecated_member_use
                    child: RaisedButton(
                      color: Theme.of(context).primaryColorDark,
                      textColor: Theme.of(context).primaryColorLight,
                      child: Text(
                        'Cancel',
                        textScaleFactor: 1.5,
                      ),
                      onPressed: () {
                        Navigator.pop(context);
                      },
                    ),
                  ),
                ],
              ),
            ),
          ],
        ),
      )
    );
  }
}