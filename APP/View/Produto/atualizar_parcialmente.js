import React, { useState } from 'react';
import { View, Text, TextInput, StyleSheet, Button, Picker, DatePickerIOS } from 'react-native';

const AtualizarProdutoParcialmente = () => {
  const [id, setId] = useState('');
  const [nome, setNome] = useState('');
  const [descricao, setDescricao] = useState('');
  const [qtd, setQtd] = useState('');
  const [marca, setMarca] = useState('');
  const [preco, setPreco] = useState('');
  const [validade, setValidade] = useState(new Date());

  const handleAtualizarProdutoParcialmente = () => {
    // Aqui você pode adicionar a lógica para atualizar o produto
    console.log('Atualizar produto parcialmente');
  };

  return (
    <View style={styles.container}>
      <Text>Atualizar Produto Parcialmente</Text>
      <TextInput
        style={styles.input}
        placeholder="ID do Produto"
        value={id}
        onChangeText={(text) => setId(text)}
        keyboardType="numeric"
      />
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
      />
      <TextInput
        style={styles.input}
        placeholder="Quantidade"
        value={qtd}
        onChangeText={(text) => setQtd(text)}
        keyboardType="numeric"
      />
      <TextInput
        style={styles.input}
        placeholder="Marca"
        value={marca}
        onChangeText={(text) => setMarca(text)}
      />
      <TextInput
        style={styles.input}
        placeholder="Preço"
        value={preco}
        onChangeText={(text) => setPreco(text)}
        keyboardType="decimal-pad"
      />
      <DatePickerIOS
        date={validade}
        onDateChange={(date) => setValidade(date)}
      />
      <Button title="Atualizar Produto Parcialmente" onPress={handleAtualizarProdutoParcialmente} />
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

export default AtualizarProdutoParcialmente;