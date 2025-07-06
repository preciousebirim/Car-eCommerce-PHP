<?php
class Cart extends DB
{
	public function get_cart($user_id = "")
	{
		if ($user_id == "") {
			$sql = "SELECT * FROM cart";
		} else {
			$sql = "SELECT * FROM cart WHERE user_id='$user_id'";
		}
		$stmt = $this->connect()->query($sql);
		return $stmt;
	}
	public function add_to_cart($product_id, $product_name, $product_price, $user_id, $user_name, $product_model, $user_email, $product_image, $quantity, $isHire = 0, $isSparePart = 0)
	{
		$conn = $this->connect();

		$sql = "SELECT id FROM cart WHERE user_id=? AND product_id=?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('ss', $user_id, $product_id);
		$stmt->execute();
		$result = $stmt->get_result();
		if ($result->num_rows > 0) {
			// Product already in cart, update quantity or other fields if needed
			$id = $result->fetch_assoc()['id'];
			$sql = "UPDATE cart SET product_name=?, product_price=?, user_name=?, product_model=?, user_email=?, product_image=?, quantity = ?, is_hire = ? WHERE id=?";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param('ssisssiii', $product_name, $product_price, $user_name, $product_model, $user_email, $product_image, $quantity, $isHire, $id);
			$stmt->execute();
		} else {

			$sql = "INSERT INTO `cart` (product_name, user_id, product_id, product_price, user_name, product_model, user_email, product_image, quantity, is_sparepart, is_hire)
			VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param('sssissssiii', $product_name, $user_id, $product_id, $product_price, $user_name, $product_model, $user_email, $product_image, $quantity, $isSparePart, $isHire);
			$stmt->execute();
		}
	}
	public function delete_cart($id)
	{
		$sql = "DELETE FROM cart WHERE id='$id';";
		$this->connect()->query($sql);
	}
}
