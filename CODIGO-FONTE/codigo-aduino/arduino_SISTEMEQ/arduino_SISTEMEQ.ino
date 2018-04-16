//--------------------------------------------------------------------------
// Projeto para conectar ao banco de dados MYSQL e escrever na tabela os   |
// valores lidos de um cartão RFID    Data: 15/06/2018                     |
// VERSÃO - 3                                                              |
//--------------------------------------------------------------------------

// ---------------------- Incluir  Bibliotecas ---------------------------------------
#include <SPI.h>
#include <String.h>
#include <Ethernet.h>
//Incluir Biblioteca do sensor RFID
#include <MFRC522.h>


// ------------------- Configurações para RFID ---------------------------------------
// Definir conexão do pino PINO NNS (Rx) do modulo RFID com a placa do Arduino MEGA
#define SS_PIN 7
// Definir conexão do pino PINO RESET do modulo RFID com a placa do Arduino MEGA
#define RST_PIN 6
// Criar uma instância da Biblioteca do RFID
MFRC522 mfrc522(SS_PIN, RST_PIN);  // Criado a Instância MFRC522.



// ------------------- Configurações para REDE IP ---------------------------------------

byte mac[] = {0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED};

// Configuracões de rede Escritório

IPAddress arduinoIP(192, 168, 1, 100);
IPAddress serverIP(192, 168, 1, 200);
IPAddress gatewayIP(192, 168, 1, 1);
IPAddress subnetIP(255, 255, 255, 0);
IPAddress dnsIP(10, 131, 0, 1);


// Informar endereço IP do computador onde esta o banco MYSQL e a aplicação PHP
//byte servidor[] = { 192,168,2,236 }; //rede casa

byte servidor[] = { 192, 168, 1, 200 }; //rede Escritório

// ------------------------ Iniciar funçoes CLIENT e SERVER ---------------------------------


// Inicializar a biblioteca Ethernet para as funções CLIENT e SERVER
EthernetServer server(80);
EthernetClient client;


// ------------------- Criar as variáveis do Banco MYSQL ---------------------------------------

// Criar as variaveis que serão usadas com o banco de Dados
String sensor1 ="" ;
float sensor2 = 0;
float sensor3 = 0;


String readString = String(30);


// --------------------- Função de TEMPORIZAÇÃO que atualiza dados do banco ------------------------

// Intervalo de tempo que a informação vai ser atualizada no banco
unsigned long previousMillis = 0;
const long interval = 2000;


void setup()
{
  Serial.begin(9600);
  SPI.begin(); // Ativar a interface SPI
  mfrc522.PCD_Init(); // Ativar a leitura do modulo RFID e Iniciar cartão MFRC522

  // -------- Iniciar placa Ethernet e reássar as configurações de rede ---------
  Ethernet.begin(mac, arduinoIP, dnsIP, gatewayIP, subnetIP);
  //Ethernet.begin(mac, arduinoIP,  gatewayIP, subnetIP);
  Serial.println("Iniciando a conexao Ethernet");
  Serial.print(" Meu Adr:");
  Serial.print(Ethernet.localIP());
  Serial.println();


}

void loop()
{

  // -------------------------- PROCEDIMENTOS DE ATIVAÇÃO E LEITURA CARTÃO RFID -------------------------------

  // Detectção do Cartão.
  if ( ! mfrc522.PICC_IsNewCardPresent())
    return;
  {
    // Se o cartão foi detectado, capturar o número serial.
    mfrc522.PICC_ReadCardSerial();
    Serial.println("CARTAO DETECTADO! NUMERO DE SERIE:");
    String conteudo = "";
    for (int i = 0; i < 5; i++) {
      
      //Mostar numero de serie do cartao no monitor serial.
      Serial.print(mfrc522.uid.uidByte[i], DEC); // Apresentar no formato Decimal
      conteudo.concat(String(mfrc522.uid.uidByte[i], HEX));
    }
    sensor1 = conteudo;
    Serial.println();
    Serial.println();
  }
  delay(1000);

  // --------------------------   FIM DOS PROCEDIMENTOS CARTAO RFID ---------------------------------


  EthernetClient client = server.available();
  unsigned long currentMillis = millis();

  // Sequencia logica acionada a regularmente para gerar dados que serao gravados no banco
  if (currentMillis - previousMillis >= interval) {
    previousMillis = currentMillis;

    if (client.connect(servidor, 80)) {
      Serial.println("conectado");


      // ------------------- CONECTA BANCO VIA PHP E SAVADADOS NO BANCO ----------------------------------

      // Executa uma conexao via programa PHP para incluir dados no banco MYSQL:
      client.print("GET http://localhost/SistemeqUna-new/php/salvadados.php?");
      client.print("sensor1=");
      client.print(sensor1);
      client.print("&sensor2=");
      client.print(sensor2);
      client.print("&sensor3=");
      client.println(sensor3);

      // ----------------------- Criando página para Acessar o ARDUINO  ---------------------------------------

      if (client)
      {
        while (client.connected())
        {
          if (client.available())
          {
            char c = client.read();

            if (readString.length() < 30) {
              readString += (c);
            }

            if (c == '\n')
            {

              // cabeçalho http padrão
              client.println("HTTP/1.1 200 OK");
              client.println("Content-Type: text/html");
              client.println();

              client.println("<!doctype html>");
              client.println("<html>");
              client.println("<head>");
              client.println("<title>Tutorial</title>");
              client.println("<meta name=\"viewport\" content=\"width=320\">");
              client.println("<meta name=\"viewport\" content=\"width=device-width\">");
              client.println("<meta charset=\"utf-8\">");
              client.println("<meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">");


            }
          }
        }
      }
    }
  }
}




