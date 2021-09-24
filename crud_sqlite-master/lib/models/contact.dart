class Contact{
  int _id;
  String _namalengkap;
  String _notelephone;
  String _namaproject;
  String _progress;
  String _waktu;

  Contact(this._namalengkap,this._notelephone, this._namaproject, this._progress, this._waktu);
  Contact.fromMap(Map<String, dynamic> map){
    this._id=map['id'];
    this._namalengkap=map['namalengkap'];
    this._notelephone=map['notelephone'];
    this._namaproject=map['namaproject'];
    this._progress=map['Proggres'];
    this._waktu=map['waktu'];
  }
  int get id => _id;
  String get namalengkap => _namalengkap;
  String get notelephone => _notelephone;
  String get namaproject => _namaproject;
  String get progress => _progress;
  String get waktu => _waktu;
  set namalengkap(String value){
    _namalengkap=value;
  }
  set notelephone(String value) {
    _notelephone = value;
  }
  set namaproject(String value) {
    _namaproject = value;
  }
  set progress(String value) {
    _progress = value;
  }
  set waktu(String value) {
    _waktu = value;
  }
 Map<String, dynamic> toMap() {
    Map<String, dynamic> map = Map<String, dynamic>();
    map['id'] = this._id;
    map['namalengkap'] = namalengkap;
    map['notelephone'] = notelephone;
    map['namaproject'] = namaproject;
    map['progress'] = progress;
    map['waktu'] = waktu;
    return map;
  } 
}