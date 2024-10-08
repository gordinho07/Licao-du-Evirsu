import React, { useState } from 'react';
import { View, Text, TextInput, StyleSheet, Button, DatePickerIOS } from 'react-native';

const InserirProduto = () => {
  const [nome, setNome] = useState('');
  const [descricao, setDescricao] = useState('');
  const [qtd, setQtd] = useState('');
  const [marca, setMarca] = useState('');
  const [preco, setPreco] = useState('');
  const [validade, setValidade] = useState(new Date());

  const handleInserirProduto = () => {
    // Aqui você pode adicionar a lógica para inserir o produto
    console.log('Inserir produto');
  };

  return (
    <View style={styles.container}>
      <Text>Inserir Produto</Text>
      <TextInput
        style={styles.input}
        placeholder="Nome"
        value={nome}
        onChangeText={(text) => setNome(text)}
      />
      <TextInput
        style={styles.textArea}
        placeholder="Descrição"
        value={descricao}
        onChangeText={(text) => setDescricao(text)}
        multiline={true}
        required
      />
      <TextInput
        style={styles.input}
        placeholder="Quantidade"
        value={qtd}
        onChangeText={(text) => setQtd(text)}
        keyboardType="numeric"
        required
      />
      <TextInput
        style={styles.input}
        placeholder="Marca"
        value={marca}
        onChangeText={(text) => setMarca(text)}
        required
      />
      <TextInput
        style={styles.input}
        placeholder="Preço"
        value={preco}
        onChangeText={(text) => setPreco(text)}
        keyboardType="decimal-pad"
        required
      />
      <DatePickerIOS
        date={validade}
        onDateChange={(date) => setValidade(date)}
        required
      />
      <Button title="Adicionar Produto" onPress={handleInserirProduto} />
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    padding: 20,
  },
  input: {
    height: 40,
    borderColor: 'gray',
    borderWidth: 1,
    width: '100%',
    padding: 10,
    marginBottom: 20,
  },
  textArea: {
    height: 100,
    borderColor: 'gray',
    borderWidth: 1,
    width: '100%',
    padding: 10,
    marginBottom: 20,
  },
});

export default InserirProduto;