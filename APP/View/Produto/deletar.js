import React, { useState } from 'react';
import { View, Text, TextInput, StyleSheet, Button } from 'react-native';

const DeletarProduto = () => {
  const [id, setId] = useState('');

  const handleDeletarProduto = () => {
    // Aqui você pode adicionar a lógica para deletar o produto
    console.log('Deletar produto');
  };

  return (
    <View style={styles.container}>
      <Text>Deletar Produto</Text>
      <TextInput
        style={styles.input}
        placeholder="ID do Produto"
        value={id}
        onChangeText={(text) => setId(text)}
        keyboardType="numeric"
        required
      />
      <Button title="Deletar Produto" onPress={handleDeletarProduto} />
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
});

export default DeletarProduto;