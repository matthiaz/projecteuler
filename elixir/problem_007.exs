defmodule Prime do 
  import Integer, only: [is_even: 1]
  def nth(n) do
    #skip first 3 primes, so we can only have to check uneven numbers
    Stream.iterate(3, &(&1+2))
    |> Stream.filter(fn x -> Prime.is?(x) end)
    |> Stream.drop(n-3)
    |> Stream.take(1)
    |> Enum.at(0)
  end
  def factors_of(intNumber) do 
    make_range(intNumber)
    |> Stream.filter(fn x -> Prime.is?(x) end)
    |> Stream.filter(fn x -> rem(intNumber,x)==0 end)
    |> Enum.to_list
  end

  def is?(0), do: false
  def is?(1), do: true
  def is?(2), do: true
  def is?(intNumber) when is_even(intNumber), do: false
  def is?(intNumber) do
    make_range(intNumber)
    |> Enum.all?(fn x -> rem(intNumber, x) > 0 end)
  end
  defp range(intMax) do
    2..intMax
  end
  defp make_range(intNumber) do
    :math.sqrt(intNumber)
    |> Float.ceil
    |> trunc
    |> range
  end
end
